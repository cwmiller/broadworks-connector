<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDisplayNames
 *
 * The parts of a user's display name that a client can display in whatever way is appropriate
 *         for the client application.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5683","type":"sequence"}]
 */
class UserDisplayNames
{
    /**
     * @ElementName lastName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5683
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5683
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName hiraganaLastName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5683
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hiraganaLastName = null;

    /**
     * @ElementName hiraganaFirstName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5683
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hiraganaFirstName = null;

    /**
     * Getter for lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastName()
    {
        $this->lastName = null;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFirstName()
    {
        $this->firstName = null;
        return $this;
    }

    /**
     * Getter for hiraganaLastName
     *
     * @return string
     */
    public function getHiraganaLastName()
    {
        return $this->hiraganaLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hiraganaLastName;
    }

    /**
     * Setter for hiraganaLastName
     *
     * @param string $hiraganaLastName
     * @return $this
     */
    public function setHiraganaLastName($hiraganaLastName)
    {
        $this->hiraganaLastName = $hiraganaLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHiraganaLastName()
    {
        $this->hiraganaLastName = null;
        return $this;
    }

    /**
     * Getter for hiraganaFirstName
     *
     * @return string
     */
    public function getHiraganaFirstName()
    {
        return $this->hiraganaFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hiraganaFirstName;
    }

    /**
     * Setter for hiraganaFirstName
     *
     * @param string $hiraganaFirstName
     * @return $this
     */
    public function setHiraganaFirstName($hiraganaFirstName)
    {
        $this->hiraganaFirstName = $hiraganaFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHiraganaFirstName()
    {
        $this->hiraganaFirstName = null;
        return $this;
    }
}

