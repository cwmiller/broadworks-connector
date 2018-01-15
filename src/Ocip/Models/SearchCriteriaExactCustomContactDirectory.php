<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactCustomContactDirectory
 *
 * Criteria for searching for a particular fully specified custom contact
 * directory.
 */
class SearchCriteriaExactCustomContactDirectory extends SearchCriteria
{

    /**
     * @ElementName customContactDirectoryName
     * @var string|null
     */
    private $customContactDirectoryName = null;

    /**
     * Getter for customContactDirectoryName
     *
     * @ElementName customContactDirectoryName
     * @return string|null
     */
    public function getCustomContactDirectoryName()
    {
        return $this->customContactDirectoryName;
    }

    /**
     * Setter for customContactDirectoryName
     *
     * @ElementName customContactDirectoryName
     * @param string|null $customContactDirectoryName
     * @return $this
     */
    public function setCustomContactDirectoryName($customContactDirectoryName)
    {
        $this->customContactDirectoryName = $customContactDirectoryName;
        return $this;
    }


}

