<div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href=""><button type="button" class="btn btn-sm btn-outline-secondary">Share</button></a>
      <a href="/ptsp/recap/export/{{ $time }}"><button type="button" class="btn btn-sm btn-outline-secondary">Export</button></a>
    </div>
    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <span data-feather="calendar"></span>
          {{ $timeTitle }}
      </button>
      
      <ul class="dropdown-menu text-end" aria-labelledby="btnGroupDrop1" style="font-size: 14px;">
          <li><a class="dropdown-item text-secondary" href="/ptsp/recap/today">Today</a></li>
          <li><a class="dropdown-item text-secondary" href="/ptsp/recap/week">This Week</a></li>
          <li><a class="dropdown-item text-secondary" href="/ptsp/recap/month">This Month</a></li>
          <li><a class="dropdown-item text-secondary" href="/ptsp/recap/all">All</a></li>
      </ul>
  </div>
  </div>