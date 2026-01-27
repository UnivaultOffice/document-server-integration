<?php

//
// (c) Copyright UNIVAULT TECHNOLOGIES 2025
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//

namespace App\UnivaultOffice\Models;

use App\Enums\FormatType;
use UnivaultOffice\DocsIntegrationSdk\Models\Format as UnivaultOfficeFormat;

class Format extends UnivaultOfficeFormat
{
    public function isAutoConvertable(): bool
    {
        return in_array('auto-convert', $this->actions);
    }

    public function extension(): string
    {
        return $this->name;
    }

    public function isWord(): bool
    {
        return $this->type === FormatType::WORD->value;
    }

    public function isCell(): bool
    {
        return $this->type === FormatType::CELL->value;
    }

    public function isSlide(): bool
    {
        return $this->type === FormatType::SLIDE->value;
    }

    public function isPDF(): bool
    {
        return $this->type === FormatType::PDF->value;
    }
}
