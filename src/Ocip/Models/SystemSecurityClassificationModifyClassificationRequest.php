<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationModifyClassificationRequest
 *
 * Modify a Security Classification
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSecurityClassificationModifyClassificationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName securityClassificationName
     * @Type string
     * @var string|null
     */
    private $securityClassificationName = null;

    /**
     * @ElementName newSecurityClassificationName
     * @Type string
     * @var string|null
     */
    private $newSecurityClassificationName = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $audioFile = null;

    /**
     * Getter for securityClassificationName
     *
     * @return string
     */
    public function getSecurityClassificationName()
    {
        return $this->securityClassificationName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassificationName;
    }

    /**
     * Setter for securityClassificationName
     *
     * @param string $securityClassificationName
     * @return $this
     */
    public function setSecurityClassificationName($securityClassificationName)
    {
        $this->securityClassificationName = $securityClassificationName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassificationName()
    {
        $this->securityClassificationName = null;
        return $this;
    }

    /**
     * Getter for newSecurityClassificationName
     *
     * @return string
     */
    public function getNewSecurityClassificationName()
    {
        return $this->newSecurityClassificationName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newSecurityClassificationName;
    }

    /**
     * Setter for newSecurityClassificationName
     *
     * @param string $newSecurityClassificationName
     * @return $this
     */
    public function setNewSecurityClassificationName($newSecurityClassificationName)
    {
        $this->newSecurityClassificationName = $newSecurityClassificationName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewSecurityClassificationName()
    {
        $this->newSecurityClassificationName = null;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFile()
    {
        $this->audioFile = null;
        return $this;
    }


}

