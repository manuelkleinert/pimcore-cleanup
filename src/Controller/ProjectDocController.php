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
class ProjectDocController extends UserAwareController
{
    /**
     * @Route("/go4dashboard/project/doc", name="go4dashboard_bundle_project_doc", methods={"GET"})
     *
     * @param array $websiteConfig
     *
     * @throws \Exception
     *
     * @return JsonResponse
     */
    public function projectdocAction(array $websiteConfig): JsonResponse
    {
        return new JsonResponse([
            'url' => sprintf(
                '//ramboo.kundennetz.ch/cli/cf-export/download/%s/index.html',
                $websiteConfig['go4dashboard_doc_name']
            )
        ]);
    }
}
