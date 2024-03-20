<?php

declare(strict_types=1);

namespace Dbest\DbestFaq\Controller;

use Doctrine\DBAL\Driver\Exception;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class FaqController
 * @package Dbest\DbestFaq\Controller
 */
class FaqController extends ActionController
{
    /**
     * @var FaqRepository
     */
    protected FaqRepository $faqRepository;

    /**
     * Inject the faq repository
     *
     */
    public function injectFaqRepository(FaqRepository $faqRepository): void
    {
        $this->faqRepository = $faqRepository;
    }

    /**
     * listAction()
     */
    public function listAction(): void
    {
        $faqs = $this->faqRepository->findAll();
        $contentData = $this->getContentData();
        $data = [
            'contentHeader' => $contentData['header'],
            'contentHeaderLayout' => $contentData['header_layout'],
            'faqs' => $faqs
        ];
        $this->view->assignMultiple($data);
    }

    /**
     * showAction()
     * @param Faq $faq The Faq to be shown
     */
    public function showAction(Faq $faq): void
    {
        $this->view->assign('faq', $faq);
    }

    /**
     * get data of plugin content element
     *
     * @return array
     */
    protected function getContentData(): array
    {
        return $this->configurationManager->getContentObject()->data;
    }
}
