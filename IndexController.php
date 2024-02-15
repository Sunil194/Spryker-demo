<?php

namespace Pyz\Yves\HomePage\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
	/**
    * @param Request $request
	*
	* @return \Spryker\Yves\Kernel\View\View
	*/
	public function indexAction(Request $request)
		{
			$contentfulUrl = 'https://cdn.contentful.com/spaces/1rv57gftg592/entries?access_token=bTBElbpQcH_ZFaPZiyKKaF6BEaN1hUB9IlcqbiJnV18';
        	$bannerData = file_get_contents($contentfulUrl);
        	$bannerData = json_decode($bannerData, true);
			//$data = ['bannerData' => $bannerData];

			return $this->view(
				['bannerData' => $bannerData],
				[],
				'@HomePage/views/home/home.twig'
			);
		}
}