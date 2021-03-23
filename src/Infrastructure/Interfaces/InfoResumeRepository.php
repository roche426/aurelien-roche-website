<?php


namespace App\Infrastructure\Interfaces;


interface InfoResumeRepository
{
    /**
    * @return array[]
    */
    public function findResumes(): array;

    /**
     * @return array[]
     */
    public function findSkills(): array;

    /**
     * @return array[]
     */
    public function findPresentation(): array;
}