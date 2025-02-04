@props(['active' => false, 'type'])
<a {{$attributes->merge([
                            'class' => 'block py-2 px-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:underline md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 ' .  ( $active ?  "underline" : "text-white" )
                            ])}}>
    {{$slot}}
</a>
