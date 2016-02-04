<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="user")
 */
class User
{
    /**
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(name="username", type="string", length=200)
     */
    private $username;

    /**
     * @Column(name="email", type="string", length=200)
     */
    private $email;

    /**
     * @Column(name="password", type="string", length=50)
     */
    private $password;

    /**
     * @Column(name="description", type="text")
     */
    private $description;

    /**
     * @Column(name="firstname", type="string", length=100)
     */
    private $firstname;

    /**
     * @Column(name="lastname", type="string", length=100)
     */
    private $lastname;

    /**
     * @Column(name="birth_date", type="date")
     */
    private $birthDate;
}
