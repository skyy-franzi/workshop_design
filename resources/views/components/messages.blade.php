@php
$message = new \App\Service\MessageService();
$messages = $message->getAll();

@endphp


    @foreach($messages as $message)

        @if ($message[1] === 'success')
            <div class="alert alert-success" role="alert">
                {{ $message[0]  }}
            </div>

        @elseif ($message[1] === 'warning')
            <div class="alert alert-warning" role="alert">
                {{ $message[0] }}
            </div>
        @endif
    @endforeach

