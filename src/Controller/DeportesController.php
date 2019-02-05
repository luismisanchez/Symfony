<?php
	/**
	 * Created by PhpStorm.
	 * User: luismi
	 * Date: 5/02/19
	 * Time: 15:51
	 */

	namespace App\Controller;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;

	class DeportesController {

		/**
		 * @Route("/deportes")
		 */
		public function inicio() {
			return new Response('Mi página de deportes!');
		}
		/**
		 * @Route("/deportes/primer-articulo")
		 */
		public function mostrar() {
			return new Response('Mi primera ruta Primer Artículo!');
		}


	}