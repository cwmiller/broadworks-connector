<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactCustomContactDirectory
 *
 * Criteria for searching for a particular fully specified custom contact directory.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:804","type":"sequence"}]
 */
class SearchCriteriaExactCustomContactDirectory extends SearchCriteria
{

    /**
     * @ElementName customContactDirectoryName
     * @Type string
     * @Group f0ada2681ca347fa83b464734259b304:804
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $customContactDirectoryName = null;

    /**
     * Getter for customContactDirectoryName
     *
     * @return string
     */
    public function getCustomContactDirectoryName()
    {
        return $this->customContactDirectoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customContactDirectoryName;
    }

    /**
     * Setter for customContactDirectoryName
     *
     * @param string $customContactDirectoryName
     * @return $this
     */
    public function setCustomContactDirectoryName($customContactDirectoryName)
    {
        $this->customContactDirectoryName = $customContactDirectoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomContactDirectoryName()
    {
        $this->customContactDirectoryName = null;
        return $this;
    }


}

