<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="comment")
 */
class Comment
{
    /**
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(name="content", type="text")
     */
    private $content;
}
