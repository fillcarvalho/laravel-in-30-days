@props(['active' => false, 'type'])
<a {{$attributes}} class="px-3 py-2 {{ $active ?  "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }}">{{$slot}}</a>
