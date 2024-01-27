<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminGetResponse22V2
 *
 * Response to the ResellerAdminGetRequest22V2.
 *         The response contains the reseller administrators profile information.
 *
 * @see ResellerAdminGetRequest22V2
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:270","type":"sequence"}]
 */
class ResellerAdminGetResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:270
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName language
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:270
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName accountDisabled
     * @Type bool
     * @Group d45e381d6dbac771631649063122a42e:270
     * @var bool|null
     */
    protected $accountDisabled = null;

    /**
     * @ElementName lastAuthenticatedDate
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:270
     * @var string|null
     */
    protected $lastAuthenticatedDate = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
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
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Getter for accountDisabled
     *
     * @return bool
     */
    public function getAccountDisabled()
    {
        return $this->accountDisabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountDisabled;
    }

    /**
     * Setter for accountDisabled
     *
     * @param bool $accountDisabled
     * @return $this
     */
    public function setAccountDisabled($accountDisabled)
    {
        $this->accountDisabled = $accountDisabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccountDisabled()
    {
        $this->accountDisabled = null;
        return $this;
    }

    /**
     * Getter for lastAuthenticatedDate
     *
     * @return string
     */
    public function getLastAuthenticatedDate()
    {
        return $this->lastAuthenticatedDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastAuthenticatedDate;
    }

    /**
     * Setter for lastAuthenticatedDate
     *
     * @param string $lastAuthenticatedDate
     * @return $this
     */
    public function setLastAuthenticatedDate($lastAuthenticatedDate)
    {
        $this->lastAuthenticatedDate = $lastAuthenticatedDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastAuthenticatedDate()
    {
        $this->lastAuthenticatedDate = null;
        return $this;
    }
}

