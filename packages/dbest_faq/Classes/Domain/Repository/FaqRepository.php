<?php

declare(strict_types=1);

namespace Dbest\DbestFaq\Domain\Repository;

use Doctrine\DBAL\Driver\Exception;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class FaqRepository
 * @package Dbest\DbestFaq\Domain\Repository
 */
class FaqRepository extends Repository
{
    /**
     * Faq Table
     */
    public const FAQ_TABLE = 'tx_dbestfaq_domain_model_faq';

    /**
     * @param string $idList
     * @return array
     * @throws Exception
     */
    public function findByUids(string $idList): array
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable(static::FAQ_TABLE);

        $queryBuilder
            ->select('*')
            ->from(static::FAQ_TABLE)
            ->where(
                $queryBuilder->expr()->in('uid', explode(',', $idList))
            )
            ->add('orderBy', 'FIELD(uid, ' . $idList . ')', true);

        return $queryBuilder
            ->execute()
            ->fetchAllAssociative();
    }
}
