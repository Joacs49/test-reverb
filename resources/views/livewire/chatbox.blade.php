
<div x-data="{ open: true }" >
    <div :class="{'-translate-y-0': open, 'translate-y-full': !open}" class="fixed transition-all duration-300 transform bottom-10 right-12 h-60 w-80">
        <div class="mb-2">
            <button @click="open = !open" type="button" :class="{ 'text-indigo-600 dark:text-white hover:bg-transparent': open }" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-indigo-400 dark:bg-indigo-600 dark:hover:bg-indigo-400">
                Chat
    
                <x-heroicon-o-chevron-up x-show="!open" x-cloak class="ms-auto block size-4" />
                <x-heroicon-o-chevron-down x-show="open" x-cloak class="ms-auto block size-4" />
    
            </button>
        </div>
        <div class="w-full h-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded overflow-auto flex flex-col px-2 py-4">
            <div x-ref="chatBox" class="flex-1 p-4 text-sm flex flex-col gap-y-1">
                @foreach($messages as $message)
                    <div><span class="text-indigo-600">{{ $message['name'] }}:</span> <span class="dark:text-white">{{ $message['text'] }}</span></div>
                @endforeach
            </div>
            <div>
                <form wire:submit.prevent="addMessage" class="flex gap-2">
                    <input wire:model="message" x-ref="messageInput" name="message" id="message" class="block w-full" />
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white font-semibold text-xs uppercase tracking-widest hover:bg-indigo-500 focus:bg-indigo-500 active:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 rounded">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
