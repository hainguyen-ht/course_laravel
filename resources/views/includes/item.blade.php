<div class="course__item col-4 grid">
    <div class="course__item__img">
        <a href="{{ route('detail', $course->id) }}">
            <img class="course__img" src="./img/courses/java.png">
        </a>
    </div>
    <div class="course__item__content">
        <h3><a href="{{ route('detail', $course->id) }}">
            {{$course->name}}
        </a></h3>
        <p class="course__item__content-des">
            {{ $course->description }}
        </p>
        <ul class="course__item__content-group">
            <li class="course__item__content-auth">
                <a class="auth__course" href="#">
                    <img class="course__item__content-avt" src="./img/icons/SkSoEQL3_400x400.jpg">
                    <p class="course__item__content-name">Admin</p>
                </a>
            </li>
            <li class="course__item__content-members">
                <i class="fas fa-users"></i>{{ $course->price }}
            </li>
            <li class="course__item__content-btn">
                <a href="{{ route('detail', $course->id) }}">{{ $course->price }} Coin</a>
            </li>
        </ul>
    </div>
</div>