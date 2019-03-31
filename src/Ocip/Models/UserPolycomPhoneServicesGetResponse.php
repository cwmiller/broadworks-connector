<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPolycomPhoneServicesGetResponse
 *
 * Response to UserPolycomPhoneServicesGetRequest.
 *
 * @see UserPolycomPhoneServicesGetRequest
 * @Groups [{"id":"4f074d986b998636e2bcb0d67372b0f4:148","type":"sequence"}]
 */
class UserPolycomPhoneServicesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName integratePhoneDirectoryWithBroadWorks
     * @Type bool
     * @Group 4f074d986b998636e2bcb0d67372b0f4:148
     * @var bool|null
     */
    private $integratePhoneDirectoryWithBroadWorks = null;

    /**
     * @ElementName includeUserPersonalPhoneListInDirectory
     * @Type bool
     * @Group 4f074d986b998636e2bcb0d67372b0f4:148
     * @var bool|null
     */
    private $includeUserPersonalPhoneListInDirectory = null;

    /**
     * @ElementName includeGroupCustomContactDirectoryInDirectory
     * @Type bool
     * @Group 4f074d986b998636e2bcb0d67372b0f4:148
     * @var bool|null
     */
    private $includeGroupCustomContactDirectoryInDirectory = null;

    /**
     * @ElementName groupCustomContactDirectory
     * @Type string
     * @Optional
     * @Group 4f074d986b998636e2bcb0d67372b0f4:148
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $groupCustomContactDirectory = null;

    /**
     * Getter for integratePhoneDirectoryWithBroadWorks
     *
     * @return bool
     */
    public function getIntegratePhoneDirectoryWithBroadWorks()
    {
        return $this->integratePhoneDirectoryWithBroadWorks instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->integratePhoneDirectoryWithBroadWorks;
    }

    /**
     * Setter for integratePhoneDirectoryWithBroadWorks
     *
     * @param bool $integratePhoneDirectoryWithBroadWorks
     * @return $this
     */
    public function setIntegratePhoneDirectoryWithBroadWorks($integratePhoneDirectoryWithBroadWorks)
    {
        $this->integratePhoneDirectoryWithBroadWorks = $integratePhoneDirectoryWithBroadWorks;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIntegratePhoneDirectoryWithBroadWorks()
    {
        $this->integratePhoneDirectoryWithBroadWorks = null;
        return $this;
    }

    /**
     * Getter for includeUserPersonalPhoneListInDirectory
     *
     * @return bool
     */
    public function getIncludeUserPersonalPhoneListInDirectory()
    {
        return $this->includeUserPersonalPhoneListInDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeUserPersonalPhoneListInDirectory;
    }

    /**
     * Setter for includeUserPersonalPhoneListInDirectory
     *
     * @param bool $includeUserPersonalPhoneListInDirectory
     * @return $this
     */
    public function setIncludeUserPersonalPhoneListInDirectory($includeUserPersonalPhoneListInDirectory)
    {
        $this->includeUserPersonalPhoneListInDirectory = $includeUserPersonalPhoneListInDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeUserPersonalPhoneListInDirectory()
    {
        $this->includeUserPersonalPhoneListInDirectory = null;
        return $this;
    }

    /**
     * Getter for includeGroupCustomContactDirectoryInDirectory
     *
     * @return bool
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return $this->includeGroupCustomContactDirectoryInDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeGroupCustomContactDirectoryInDirectory;
    }

    /**
     * Setter for includeGroupCustomContactDirectoryInDirectory
     *
     * @param bool $includeGroupCustomContactDirectoryInDirectory
     * @return $this
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory)
    {
        $this->includeGroupCustomContactDirectoryInDirectory = $includeGroupCustomContactDirectoryInDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeGroupCustomContactDirectoryInDirectory()
    {
        $this->includeGroupCustomContactDirectoryInDirectory = null;
        return $this;
    }

    /**
     * Getter for groupCustomContactDirectory
     *
     * @return string
     */
    public function getGroupCustomContactDirectory()
    {
        return $this->groupCustomContactDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupCustomContactDirectory;
    }

    /**
     * Setter for groupCustomContactDirectory
     *
     * @param string $groupCustomContactDirectory
     * @return $this
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory)
    {
        $this->groupCustomContactDirectory = $groupCustomContactDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupCustomContactDirectory()
    {
        $this->groupCustomContactDirectory = null;
        return $this;
    }


}

