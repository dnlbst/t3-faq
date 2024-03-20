<?php

declare(strict_types=1);

namespace Dbest\DbestFaq\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class Faq
 * @package Dbest\DbestFaq\Domain\Model
 */
class Faq extends AbstractEntity
{
    /**
     * @var string
     */
    protected string $question = '';

    /**
     * @var string
     */
    protected string $answer = '';

    /**
     * @param string $question
     */
    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @param string $answer
     */
    public function setAnswer(string $answer): void
    {
        $this->answer = $answer;
    }

    /**
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->answer;
    }
}