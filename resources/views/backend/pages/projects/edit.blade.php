@extends('backend.layouts.backend_master')

@section('title','Projects')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title d-inline">Projects</h3>
            <a href="{{ route('team-leader.projects.index') }}" class="btn btn-success btn-sm float-right">Back</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('team-leader.projects.update',$project->id) }}" method="post">
              @csrf 
              @method('put')
              <div class="form-group">
                <label for="name">Project Title</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Team Name" value="{{ old('name',$project->name) }}">
                @error('name')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="to-do" {{ $project->status == 'to-do' ? 'selected' : '' }}>To Do</option>
                    <option value="in-progress" {{ $project->status == 'in-progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="done" {{ $project->status == 'done' ? 'selected' : '' }}>Done</option>
                </select>
                @error('status')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="members">Members</label>
                <input type="number" name="members" class="form-control" id="members" placeholder="Team Members" value="{{ old('members',$project->members) }}">
                @error('members')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" class="form-control" id="start_date" placeholder="Team start_date" value="{{ old('start_date',$project->start_date) }}">
                @error('start_date')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" name="end_date" class="form-control" id="end_date" placeholder="Team end_date" value="{{ old('end_date',$project->end_date) }}">
                @error('end_date')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="team_id">Team</label>
                <select name="team_id" id="team_id" class="form-control">
                  @forelse ($teams as $team)
                    <option value="{{ $team->id }}" {{ $project->team_id == $team->id ? 'selected' : '' }}>{{ $team->title }}</option>
                  @empty
                    
                  @endforelse
                </select>
                @error('team_id')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for=""></label>
                <button type="submit" class="btn btn-warning btn-block">Submit</button>
              </div>
            </form>
          </div>
         
        </div>
      </div>
    </div>
    
  </div>

@endsection