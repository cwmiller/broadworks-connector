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
     * @Type string
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

