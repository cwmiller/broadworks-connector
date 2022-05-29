<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileGetListRequest
 *
 * Get the list of available announcement files for a Group.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           groupExternalId
 *         
 *         The response is either a GroupAnnouncementFileGetListResponse or an ErrorResponse.
 *
 * @see GroupAnnouncementFileGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:1886","type":"sequence","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:1887","type":"choice","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:1888","type":"sequence"}]}]}]
 */
class GroupAnnouncementFileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1888
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1888
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName groupExternalId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1887
     * @MaxLength 36
     * @var string|null
     */
    protected $groupExternalId = null;

    /**
     * @ElementName announcementFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1886
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType|null
     */
    protected $announcementFileType = null;

    /**
     * @ElementName includeAnnouncementTable
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1886
     * @var bool|null
     */
    protected $includeAnnouncementTable = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1886
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaAnnouncementFileName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1886
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[]
     */
    protected $searchCriteriaAnnouncementFileName = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for groupExternalId
     *
     * @return string
     */
    public function getGroupExternalId()
    {
        return $this->groupExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupExternalId;
    }

    /**
     * Setter for groupExternalId
     *
     * @param string $groupExternalId
     * @return $this
     */
    public function setGroupExternalId($groupExternalId)
    {
        $this->groupExternalId = $groupExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupExternalId()
    {
        $this->groupExternalId = null;
        return $this;
    }

    /**
     * Getter for announcementFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType
     */
    public function getAnnouncementFileType()
    {
        return $this->announcementFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementFileType;
    }

    /**
     * Setter for announcementFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType $announcementFileType
     * @return $this
     */
    public function setAnnouncementFileType(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType $announcementFileType)
    {
        $this->announcementFileType = $announcementFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementFileType()
    {
        $this->announcementFileType = null;
        return $this;
    }

    /**
     * Getter for includeAnnouncementTable
     *
     * @return bool
     */
    public function getIncludeAnnouncementTable()
    {
        return $this->includeAnnouncementTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeAnnouncementTable;
    }

    /**
     * Setter for includeAnnouncementTable
     *
     * @param bool $includeAnnouncementTable
     * @return $this
     */
    public function setIncludeAnnouncementTable($includeAnnouncementTable)
    {
        $this->includeAnnouncementTable = $includeAnnouncementTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeAnnouncementTable()
    {
        $this->includeAnnouncementTable = null;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaAnnouncementFileName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[]
     */
    public function getSearchCriteriaAnnouncementFileName()
    {
        return $this->searchCriteriaAnnouncementFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAnnouncementFileName;
    }

    /**
     * Setter for searchCriteriaAnnouncementFileName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName[] $searchCriteriaAnnouncementFileName
     * @return $this
     */
    public function setSearchCriteriaAnnouncementFileName(array $searchCriteriaAnnouncementFileName)
    {
        $this->searchCriteriaAnnouncementFileName = $searchCriteriaAnnouncementFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAnnouncementFileName()
    {
        $this->searchCriteriaAnnouncementFileName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAnnouncementFileName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAnnouncementFileName $searchCriteriaAnnouncementFileName
     * @return $this
     */
    public function addSearchCriteriaAnnouncementFileName($searchCriteriaAnnouncementFileName)
    {
        $this->searchCriteriaAnnouncementFileName[] = $searchCriteriaAnnouncementFileName;
        return $this;
    }


}

