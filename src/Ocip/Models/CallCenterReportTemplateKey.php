<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportTemplateKey
 *
 * Uniquely identifies a call center report template created in the system.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1085","type":"sequence"}]
 */
class CallCenterReportTemplateKey
{
    /**
     * @ElementName templateLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1085
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel|null
     */
    protected $templateLevel = null;

    /**
     * @ElementName templateName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1085
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $templateName = null;

    /**
     * Getter for templateLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel
     */
    public function getTemplateLevel()
    {
        return $this->templateLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateLevel;
    }

    /**
     * Setter for templateLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel $templateLevel
     * @return $this
     */
    public function setTemplateLevel(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel $templateLevel)
    {
        $this->templateLevel = $templateLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateLevel()
    {
        $this->templateLevel = null;
        return $this;
    }

    /**
     * Getter for templateName
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateName;
    }

    /**
     * Setter for templateName
     *
     * @param string $templateName
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateName()
    {
        $this->templateName = null;
        return $this;
    }
}

