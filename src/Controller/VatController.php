<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\Calculator;
use App\Entity\Vat;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\VatRepository;
use App\Library\File\Csv;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerInterface;

class VatController extends AbstractController
{
    /**
     * @Route("/vat", name="app_vat")
     */
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
    	$repository = $doctrine->getRepository(Vat::class);
    	$items = $repository->findAll();
    	
    	$vat   = new Vat();    	
    	$form  = $this->createForm(Calculator::class, $vat, [
    			'action' => $this->generateUrl('app_vat'),
    	]);
    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {
    	
    		$data = $form->getData();
    	
    		//exit(var_dump($data));
    		$em = $doctrine->getManager();
       		$em->persist($data);
    		$em->flush();

    		return $this->redirectToRoute('app_vat');
    	}
    	
        return $this->render('vat/index.html.twig', [
                'calculator' => $form->createView(),
        		'items' => $items
        ]);
    }
    
    /**
     * @Route("/vat/delete/{id}", name="app_vat_delete")
     */
    public function vatRecordDelete(ManagerRegistry $doctrine, int $id): Response
    {
    	$em = $doctrine->getManager();
    	$record = $em->getRepository(Vat::class)->find($id);
    	
    	if (!$record) {
    		throw $this->createNotFoundException('No vat record found');
    	}
    	
    	$em->remove($record);
    	$em->flush();
    	
    	return $this->redirectToRoute('app_vat');
    }
    
    /**
     * @Route("/vat/delete-all", name="app_vat_delete_all")
     */
    public function vatRecordDeleteAll(ManagerRegistry $doctrine): Response
    {
    	$em = $doctrine->getManager();
    	$repository = $em->getRepository(Vat::class);
    	$repository->deleteAllVatRecords();
    	
    	return $this->redirectToRoute('app_vat');
    }
    
    /**
     * @Route("/vat/export", name="app_vat_export")
     */
    public function vatRecordsExportToCsv(ManagerRegistry $doctrine){
    	
    	$em = $doctrine->getManager();    	
    	$repository = $em->getRepository(Vat::class);
    	
    	$r = [];
    	if($em->getRepository(Vat::class)->findAll()){    		
    		foreach($em->getRepository(Vat::class)->findAll() as $row){
    			$date = $row->getDate();
    			$r[] = [
    					$row->getCurrency(),
    					$row->getCost(),
    					$row->getVatRatePercentage(),
    					$row->getVatRateAmount(),
    					$row->getGrossAmount(),
    					$date->format('Y-m-d H:i:s')
    			];
    		}
    	}  	
    	
    	$csv = new Csv();
    	$csv->setData($r);
    	//    	
    	$response = new Response();
    	$response->headers->set('Content-type', 'text/csv');
    	$response->headers->set('Cache-Control', 'private');
    	$response->headers->set('Content-Disposition', 'attachment; filename="vat_list.csv";');
    	$response->sendHeaders();
  	    // \\
    	$csv->out();
    	
    	return $response;
    	
    }
}
