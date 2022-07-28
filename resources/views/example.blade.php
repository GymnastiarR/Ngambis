<div class="flex bg-white shadow-2xl w-full px-4 md:px-8 py-10 rounded-lg my-5">
    <div class="w-full md:w-4/5 md:px-8">
            <ul class="justify-evenly flex-wrap w-full">
                @foreach ($questions as $question)
                    <li class="py-2 flex border-b-2 mb-4" id="{{ $question->id }}">
                        <div class="md:text-lg">
                            <p class="inline-block w-10">
                                {{ $loop->iteration }}.
                            </p>
                        </div>
                        <div>
                            <div class="mb-4 text-sm md:text-lg">
                                {!! $question->body !!}
                            </div>
                            <div >
                                @foreach ($question->options as $option)
                                <input class="mr-3" type="radio" name="{{ $question->id }}" id="{{ $option->id }}" value="{{ $option->id }}"><label for="">a. {!! $option->body !!}</label>
                                @endforeach
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
    </div>
</div>