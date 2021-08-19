<?php

class PostEntity
{
    protected int $id;
    protected string $itle;
    protected datetime $updateAt;
    protected string $chapo;
    protected $content;
    protected string $author;

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of itle
     *
     * @return string
     */
    public function getItle(): string
    {
        return $this->itle;
    }

    /**
     * Set the value of itle
     *
     * @param string $itle
     *
     * @return self
     */
    public function setItle(string $itle): self
    {
        $this->itle = $itle;

        return $this;
    }

    /**
     * Get the value of updateAt
     *
     * @return datetime
     */
    public function getUpdateAt(): datetime
    {
        return $this->updateAt;
    }

    /**
     * Set the value of updateAt
     *
     * @param datetime $updateAt
     *
     * @return self
     */
    public function setUpdateAt(datetime $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get the value of chapo
     *
     * @return string
     */
    public function getChapo(): string
    {
        return $this->chapo;
    }

    /**
     * Set the value of chapo
     *
     * @param string $chapo
     *
     * @return self
     */
    public function setChapo(string $chapo): self
    {
        $this->chapo = $chapo;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of author
     *
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }
}
