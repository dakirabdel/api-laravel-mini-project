
<style>
    .alert {
        width: 100%;
        text-align: center;
        padding: 0%;
        margin: 10px 0;
        font-size: 1.2em;
        color: white;
        border-radius: 5px;
    }

    /* Specific styles for each alert type */
    .danger {
        background-color: rgba(255, 0, 0, 0.547);
    }

    .warning {
        background-color: rgba(255, 166, 0, 0.634);
    }

    .success {
        background-color: rgba(0, 128, 0, 0.514);
    }
    
</style>
@props(["type"])
<div class="alert {{$type}}" >
    <strong>{{$slot}} </strong>
</div>
