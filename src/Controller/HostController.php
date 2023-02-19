<?php

namespace App\Controller;

use App\Entity\Host;
use App\Pagination\Paginator;
use App\Repository\BrandCom\GalleryRepository;
use App\Repository\HostRepository;
use App\Repository\MenuItemRepository;
use App\Repository\PopupRepository;
use Doctrine\ORM\QueryBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;

/**
 * @Route("/")
 */
class HostController extends AbstractController
{
	/**
	 * @Route("/", methods={"GET"}, name="homepage", host="{host}")
	 * @ParamConverter("host", options={"mapping": {"host": "host"}})
	 */
	public function index(Request $request, PopupRepository $popupRepository, MenuItemRepository $menuItemRepository, GalleryRepository $galleryRepository, Security $security, Host $host): Response
	{
		if(is_null($host))
		{
			throw new HttpException(404, 'not found');
		}
        $locale = explode('-', $host->getLanguage())['0'];
        $request->setLocale($locale);

        return $this->render('frontend/homepage.html.twig', [
            'content' => !is_null($host->getHomepage()) ? $host->getHomepage()->getContent() : '<img alt="under construction" style="width:100%;margin:0 auto;" src="https://source.unsplash.com/NoOrDKxUfzo">',
            'host' => $host,
            'popups' => $popupRepository->findAll(),
            'isHomepage' => true,
            'carousel' => $galleryRepository->getFrontendCarousel($host),
            'menuItems' => $this->createPager($menuItemRepository->getForWebsiteWhereNotParentPaginated($host))
        ]);

        //return $this->render('frontend/homepage.html.twig', ['host' => $host]);
	}

    protected function createPager(QueryBuilder $qb, ?int $page = 1, ?int $pageSize = 12): Paginator
    {
        return (new Paginator($qb, $pageSize, $page))->paginate();
    }
}
