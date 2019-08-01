<?php
/**
 * Created by PhpStorm.
 * User: GHOUFA Zouhayer Amine
 * Date: 01/08/19
 * Time: 12:26
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage(){

        return new Response('aaaaaaaa');
    }

    /**
     * @Route("/show")
     */
    public function qf(){

        return new Response('fffffffffff');
    }

}