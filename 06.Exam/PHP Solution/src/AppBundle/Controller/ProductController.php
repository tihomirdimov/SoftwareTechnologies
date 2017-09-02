<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        //TODO: Implement me ...

        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $product = $productRepository->findAll();
        return $this->render(':product:index.html.twig', [
            'products' => $product,
        ]);
	}

    /**
     * @param Request $request
     * @Route("/create", name="create")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        //TODO: Implement me ...

        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($product->getPriority() == null
                || $product->getName() == null
                || $product->getQuantity() == null
                || $product->getStatus() == null) {
                return $this->redirectToRoute('index');
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('index');
        }
        return $this->render('product/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit($id, Request $request)
    {
        //TODO: Implement me ...

        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $product = $productRepository ->find($id);
        if ($product == null) {
            return $this->redirectToRoute('index');
        }
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->merge($product);
            $em->flush();
            return $this->redirectToRoute('index');
        }
        return $this->render('product/edit.html.twig', ['product' => $product,'form'=>$form->createView()] );
    }
}
