<?php

namespace App\Filament\Resources\TopicResource\Pages;

use App\Filament\Resources\TopicResource;
use App\Filament\Resources\TopicsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTopic extends CreateRecord
{
    protected static string $resource = TopicsResource::class;
}
