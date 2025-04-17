<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\Select::make('project_category_id')->relationship('projectCategory', 'name'),
                Forms\Components\TextInput::make('client_name'),
                Forms\Components\TextInput::make('location'),
                Forms\Components\Textarea::make('description'),
                Forms\Components\DatePicker::make('start_date'),
                Forms\Components\DatePicker::make('end_date'),
                Forms\Components\FileUpload::make('old_image')->directory('projects'),
                Forms\Components\FileUpload::make('new_image')->directory('projects'),
                Forms\Components\FileUpload::make('image1')->directory('projects'),
                Forms\Components\FileUpload::make('image2')->directory('projects'),
                Forms\Components\FileUpload::make('image3')->directory('projects'),
                Forms\Components\FileUpload::make('image4')->directory('projects'),
                Forms\Components\FileUpload::make('image5')->directory('projects'),
                Forms\Components\FileUpload::make('image6')->directory('projects')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('projectCategory.name'),
                Tables\Columns\TextColumn::make('client_name'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('created_at'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('project_category_id')
                    ->relationship('projectCategory', 'name')
                    ->label('Project Category'),
                Tables\Filters\Filter::make('name')
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->label('Project Name')
                            ->placeholder('Search by project name...')
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['name'],
                                fn (Builder $query, $name): Builder => $query->where('name', 'like', "%{$name}%")
                            );
                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
