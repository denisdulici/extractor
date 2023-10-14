<?php

namespace HelgeSverre\Extractor\Extraction\Concerns;

use HelgeSverre\Extractor\Extraction\Extractor;
use HelgeSverre\Extractor\Text\TextContent;
use Illuminate\Support\Str;

/**
 * @mixin Extractor
 */
trait TrimsInput
{
    public function bootTrimsInput()
    {
        $this->registerPreprocessor(function (TextContent|string $input): string {
            return Str::of($input)->squish()->trim()->toString();
        });
    }
}