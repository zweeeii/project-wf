<section {{ $attributes->class([ 'book', 'flex' ]) }}>
    <a href="{{ route('books.show', $id) }}">
        <x-book.cover :picture="$cover ?? null" />
    </a>

    <section class="book__info flex-column margin-left-30px">
        <a
            class="a--text"
            href="{{ route('books.show', $id) }}"
        >
            <span class="book__title">{{ $title }}</span>
        </a>

        @if(isset($describtion) && !is_null($describtion))
            <span>{{ $describtion }}</span>
        @endif
        <br>
        
        <span class="book__author">For the Author : {{ $author->name }}</span>
        

        <section class="margin-top-25px">

        </section>
    </section>

    <section class="margin-left-auto">
        @if($available)
            <x-button.link
                form-id="borrow-book-{{ $id }}"
                method="POST"
                route-name="borrow-book"
                :route-param="$id"
            >
                Borrow Now
            </x-button.link>
        @endif
    </section>
</section>

