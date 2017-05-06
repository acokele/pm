<div class="progress xs">
    <div 
    @if($percent <= 30)
        class="progress-bar progress-bar-danger" 
    @elseif(80 - $percent < 0)
         class="progress-bar progress-bar-success" 
    @else
        class="progress-bar progress-bar-yellow" 
    @endif
        style="width: {{ $percent }}%"></div>
</div>