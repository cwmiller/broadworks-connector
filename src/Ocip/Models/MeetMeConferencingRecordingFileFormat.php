<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingRecordingFileFormat
 *
 * Conference recording file format.
 *
 * @method static MeetMeConferencingRecordingFileFormat WAV()
 * @method static MeetMeConferencingRecordingFileFormat MP3()
 * @EnumValueType string
 */
class MeetMeConferencingRecordingFileFormat extends \MyCLabs\Enum\Enum
{
    public const WAV = 'WAV';

    public const MP3 = 'MP3';
}

