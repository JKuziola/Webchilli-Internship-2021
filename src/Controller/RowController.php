<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Devices;
use App\Repository\DevicesRepository;
use App\Repository\CompaniesRepository;

class RowController extends AbstractController{

    /**
     * Undocumented function
     *@Route("/deletion/{id}", name="row_deletion")
     */
    public function delete(DevicesRepository $repository, $id)
    {
        $repository->DeleteRow($id);
        $repository->UpdateId();

            return $this->redirectToRoute('app_show');
    }
    /**
     * Undocumented function
     *@Route("/edit/{id}", name="row_edition")
     */
    public function edit($id)
    {

            return $this->render('question/edition.html.twig', ['id'=>$id]);
    }
    /**
     * Undocumented function
     *@Route("/update/{id}", name="row_update")
     */
    public function update(DevicesRepository $repository, $id)
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $device_name= $_POST["name"];
            $company_name= $_POST["CompanyName"];
            $ExpiryDatestring= $_POST["expiryDate"];
            $Status= $_POST["Status"];
        }
            $repository->EditRow($id, $device_name, $company_name, $ExpiryDatestring, $Status);

            return $this->redirectToRoute('app_show');
    }

}
