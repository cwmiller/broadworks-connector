<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsModifyRequest22
 *
 * Modify the system level data associated with Enhanced Call Logs.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f6b3702edb5f67fa12c2c426d98657db:268","type":"sequence"}]
 */
class SystemEnhancedCallLogsModifyRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName maxNonPagedResponseSize
     * @Type int
     * @Optional
     * @Group f6b3702edb5f67fa12c2c426d98657db:268
     * @MinInclusive 100
     * @MaxInclusive 1000
     * @var int|null
     */
    private $maxNonPagedResponseSize = null;

    /**
     * @ElementName eclQueryApplicationURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group f6b3702edb5f67fa12c2c426d98657db:268
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $eclQueryApplicationURL = null;

    /**
     * @ElementName eclQueryDataRepositoryURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group f6b3702edb5f67fa12c2c426d98657db:268
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $eclQueryDataRepositoryURL = null;

    /**
     * @ElementName defaultSchema
     * @Type string
     * @Nillable
     * @Optional
     * @Group f6b3702edb5f67fa12c2c426d98657db:268
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultSchema = null;

    /**
     * Getter for maxNonPagedResponseSize
     *
     * @return int
     */
    public function getMaxNonPagedResponseSize()
    {
        return $this->maxNonPagedResponseSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxNonPagedResponseSize;
    }

    /**
     * Setter for maxNonPagedResponseSize
     *
     * @param int $maxNonPagedResponseSize
     * @return $this
     */
    public function setMaxNonPagedResponseSize($maxNonPagedResponseSize)
    {
        $this->maxNonPagedResponseSize = $maxNonPagedResponseSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxNonPagedResponseSize()
    {
        $this->maxNonPagedResponseSize = null;
        return $this;
    }

    /**
     * Getter for eclQueryApplicationURL
     *
     * @return string|null
     */
    public function getEclQueryApplicationURL()
    {
        return $this->eclQueryApplicationURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eclQueryApplicationURL;
    }

    /**
     * Setter for eclQueryApplicationURL
     *
     * @param string|null $eclQueryApplicationURL
     * @return $this
     */
    public function setEclQueryApplicationURL($eclQueryApplicationURL = null)
    {
        if ($eclQueryApplicationURL === null) {
            $this->eclQueryApplicationURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->eclQueryApplicationURL = $eclQueryApplicationURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEclQueryApplicationURL()
    {
        $this->eclQueryApplicationURL = null;
        return $this;
    }

    /**
     * Getter for eclQueryDataRepositoryURL
     *
     * @return string|null
     */
    public function getEclQueryDataRepositoryURL()
    {
        return $this->eclQueryDataRepositoryURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eclQueryDataRepositoryURL;
    }

    /**
     * Setter for eclQueryDataRepositoryURL
     *
     * @param string|null $eclQueryDataRepositoryURL
     * @return $this
     */
    public function setEclQueryDataRepositoryURL($eclQueryDataRepositoryURL = null)
    {
        if ($eclQueryDataRepositoryURL === null) {
            $this->eclQueryDataRepositoryURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->eclQueryDataRepositoryURL = $eclQueryDataRepositoryURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEclQueryDataRepositoryURL()
    {
        $this->eclQueryDataRepositoryURL = null;
        return $this;
    }

    /**
     * Getter for defaultSchema
     *
     * @return string|null
     */
    public function getDefaultSchema()
    {
        return $this->defaultSchema instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultSchema;
    }

    /**
     * Setter for defaultSchema
     *
     * @param string|null $defaultSchema
     * @return $this
     */
    public function setDefaultSchema($defaultSchema = null)
    {
        if ($defaultSchema === null) {
            $this->defaultSchema = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultSchema = $defaultSchema;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultSchema()
    {
        $this->defaultSchema = null;
        return $this;
    }


}

