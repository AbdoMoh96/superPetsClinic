<div class="icons">
    <ul class="messenger">

        @if($contact->snapchat)
        <li>
            <a href="{{$contact->snapchat}}" target="_blank" class="facebook-link">
                <i class="fab fa-snapchat fa-3x" aria-hidden="true"></i>
            </a>
        </li>
        @endif

        @if($contact->phone)
        <li>
            <a href="{{$contact->phone}}" class="phone-link" target="_blank">
                <i class="fas fa-phone fa-3x" aria-hidden="true"></i>
            </a>
        </li>
        @endif

        @if($contact->whatsapp)
        <li>
            <a href="{{$contact->whatsapp}}" class="whatsapp-link" target="_blank">
                <i class="fab fa-whatsapp fa-3x" aria-hidden="true"></i>
            </a>
        </li>
        @endif

        @if($contact->instagram)
        <li>
            <a href="{{$contact->instagram}}" class="insta-link" target="_blank">
                <i class="fab fa-instagram fa-3x" aria-hidden="true"></i>
            </a>
        </li>
        @endif

       @if($contact->twitter)
        <li>
            <a href="{{$contact->twitter}}" class="twitter-link" target="_blank">
                <i class="fab fa-twitter fa-3x" aria-hidden="true"></i>
            </a>
        </li>
       @endif

    </ul>
</div>
