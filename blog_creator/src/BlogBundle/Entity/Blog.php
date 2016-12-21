<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="blog")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\BlogRepository")
 */
class Blog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_articles", type="integer", unique=true)
     */
    private $idArticles;

    /**
     * @var int
     *
     * @ORM\Column(name="id_comments", type="integer", unique=true)
     */
    private $idComments;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", unique=true)
     */
    private $idUser;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idArticles
     *
     * @param integer $idArticles
     *
     * @return Blog
     */
    public function setIdArticles($idArticles)
    {
        $this->idArticles = $idArticles;

        return $this;
    }

    /**
     * Get idArticles
     *
     * @return int
     */
    public function getIdArticles()
    {
        return $this->idArticles;
    }

    /**
     * Set idComments
     *
     * @param integer $idComments
     *
     * @return Blog
     */
    public function setIdComments($idComments)
    {
        $this->idComments = $idComments;

        return $this;
    }

    /**
     * Get idComments
     *
     * @return int
     */
    public function getIdComments()
    {
        return $this->idComments;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Blog
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
