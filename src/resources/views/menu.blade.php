<ul>
    @foreach($menuItems as $menuItem)
        <li>{!! $menuItem->content  !!}</li>
        {!! $menuItem->renderSubMenu() !!}
    @endforeach
</ul>