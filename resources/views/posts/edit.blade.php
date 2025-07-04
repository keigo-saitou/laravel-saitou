<x-app-layout>
    <x-slot name="header">
     edit
    </x-slot>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <!--formは送るの作業 -->    
    <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
            </div>
                <!--   ここが保存かつリクエストの送信  -->
            <input type="submit" value="保存">
        </form>
    </div>
</body>
</x-app-layout>
