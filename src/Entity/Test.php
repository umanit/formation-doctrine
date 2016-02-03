<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="test")
 */
class Test
{
    /**
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(name="text", type="string", length=140)
     */
    private $text;

    /**
     * @Column(name="text2", type="string", length=140)
     */
    private $text2;
}
