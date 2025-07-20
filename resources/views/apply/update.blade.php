<x-layout>

    <x-slot:heading>
        Update Job: {{ $job ->job_name }} Employer:{{ $job->employer->name }}
    </x-slot:heading>
       <form action="{{ route('job.update', ['job'=>$job->id]) }}" method="POST">
        @method('PATCH')
        @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Edit job</h2>
      <p class="mt-1 text-sm/6 text-gray-600">Details of your Job</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="jobname" class="block text-sm/6 font-medium text-gray-900">Job Name</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
              <input type="text" name="job_name" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"  value="{{ $job->job_name }}"  required/>
              <input type="hidden" name="employer_id" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value="4"/>
            </div>
            @error('job_name')
              <p class="text-xs text-red-400 font-semibold italic">{{ $message }} </p>
            @enderror
          </div>
        </div>
      </div>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="jobname" class="block text-sm/6 font-medium text-gray-900">Salary</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
              <input type="text" name="salary" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" value=" $ {{ $job->salary }} "  required/>
            </div>
            @error('salary')
             <p class="text-xs text-red-400 font-semibold italic">{{ $message }}</p>
            @enderror
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
    <div class="sm:col-span-4">
        <label for="employer_id" class="block text-sm/6 font-medium text-gray-900">Employer</label>
        <div class="mt-2">
            <select name="employer_id" id="employer_id" required
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6 sm:leading-6">
                <option value="">{{ $job->employer->name }}</option>
                @foreach ($employers as $employer)
                    <option value="{{ $employer->id }}">{{ $employer->name }}</option>
                @endforeach
            </select>
            @error('employer_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
          </div>
        </div>
        

    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="{{ route('home') }}">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    </a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>


</form>

</x-layout>