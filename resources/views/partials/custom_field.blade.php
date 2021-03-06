@if (empty($raw))
    @if (strpos($label, '|') !== false)
        {!! Former::select($field)
                ->label(Utils::getCustomLabel($label))
                ->addOption('', '')
                ->options(Utils::getCustomValues($label))
                ->data_bind(empty($databind) ? '' : $databind) !!}
    @else
        {!! Former::text($field)
                ->label(e($label))
                ->data_bind(empty($databind) ? '' : $databind) !!}
    @endif
@else
    @if (strpos($label, '|') !== false)
        {!! Former::select($field)
                ->label(Utils::getCustomLabel($label))
                ->addOption('', '')
                ->options(Utils::getCustomValues($label))
                ->data_bind(empty($databind) ? '' : $databind)
                ->addClass('form-control invoice-item')
                ->raw() !!}
    @else
        {!! Former::text($field)
                ->label(e($label))
                ->data_bind(empty($databind) ? '' : $databind)
                ->addClass('form-control invoice-item')
                ->raw() !!}
    @endif
@endif
