<?php

namespace CleanupBundle\Controller;

use Pimcore\Controller\UserAwareController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/settings")
 *
 * @internal
 */
class PimcoreDocController extends UserAwareController
{
    /**
     * @Route("/go4dashboard/pimcore/doc", name="go4dashboard_bundle_pimcore_doc", methods={"GET"})
     *
     *
     * @throws \Exception
     *
     * @return JsonResponse
     */
    public function pimcoredocAction(): JsonResponse
    {
        return new JsonResponse(['url' => '//ramboo.kundennetz.ch/cli/cf-export/download/Grunddokumentation/']);
    }
}
