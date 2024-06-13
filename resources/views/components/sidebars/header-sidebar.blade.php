<div class="flex flex-row items-center h-16 px-2 py-10 gap-2">
    <img src="{{ asset( (isset($logoHeaderSidebar) && $logoHeaderSidebar) ? 'uploads' : 'assets' .'/img/logo-admin.svg') }}" alt="logo sidebar" class="w-12 h-12">
    <div class="flex flex-col justify-center">
        <span class="text-lg text-slate-700 font-semibold">{{ env('APP_NAME') }}</span>
        <span class="text-base text-slate-400 font-normal">{{ (isset($descriptionHeaderSidebar) && $descriptionHeaderSidebar) ? $descriptionHeaderSidebar : '' }}</span>
    </div>
</div>
