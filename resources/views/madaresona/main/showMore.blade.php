@extends('layouts.main')

@section('content')
    <section class="section-base section-color align-center" style="background-color: white ">


        <h2 class="align-center">{{ $news->title_ar }}</h2>
        {{--<p class="align-center width-650">
            One of the most large and features rich templates on the market. </p>--}}
        <hr class="space">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                {{--<img src="{{ env('IMAGE_URL') }}/images/{{ $schoolName }}/news/{{ $news->img }}" alt="">--}}
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAwKCxYWDQ0NDg0NDQ0NDQ0NDQ0NDRENDQ0YIh4jIiEeISAkHSYrJCYlJyAgLC4gJScoKys3IyowNC8pMyUqKygBDQ0NEA8QFQ8PFSkeFR0pKCgoKCgoKCgoKCgoKCgoKigoKCgoKCgoKCgoKCgoKCgoKCcnJycoJycnJycnJycnJ//AABEIAOkA2AMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAADAAECBAUGB//EAEEQAAIBAgIECgkCBQIHAAAAAAECAAMREiEEIjEyBUFCUmFicXKBkRNRgpKhscHR8AYjFKLC4fEzsiQ0U3PS4vL/xAAYAQADAQEAAAAAAAAAAAAAAAAAAQIDBP/EAB0RAQEBAQEBAQEBAQAAAAAAAAABEQISITEDEyL/2gAMAwEAAhEDEQA/AOAjWhMEWCdOMNDtGIhsERSGDQLRWhwkf0cMHpWIjhYc044pxeR6VikWGWzTygvRm/V+sLDnQWCT9DlLdKleXaGi3ODnbsmw9Za0LiOaE6Snwfle0lT4IdtiN7sPh1yxowLJOq0jgxl2oyzNq6LbilSam9YwysjaXqtK0rFZNhzqUK0VpO0VosPTSQitHAlA4jiNJARkQjiMI4jIooooBcVIUUT6oekktKJpjO1WXRcrwbUJqqLiS/h7x/E/WIaMkKU2TokgNFjyFbWWKMkaM0TRtD06EPMTtYzU7QTUwed/tabVfR7ZykaecV5OdZQqFHObmi6PfDlrLKuiixnS8GU7ulgi6y6zpjy7ARMepY3mVscH8HotNqtUamHHh53HYTC4R4RrM7JQP8LSXdSjqNbpbaT+WnfOqjR7VAmHANXaoPj0zh9Nppjaxkfz/wCr9X3MnxkrwlWU/uv/ABVLlUtI18Q6G2g9PwMuaZolKpQTStGDeiq4tVt6kw2qekfaUa1ETW/T64qHCFA6yhKVZV5rXIJ8Rbym9kk9Rz+rb5ri9M0exawmS9OdhpqC7C3KmDWpZtHed+wTrzGWUkcEumnF6KT5V7igVitLTU4ErJzFTrULRWkrRWgNRikiIrQPTCKPaKB63kTKFVIqYlpUvNNZ2GprLVFc49NMrSxTp2MWnORqVMcYlkaMpGyRQWEsU3k6vyoNogvGp6Mb2tNQAGGp0he8r1U3lj1dElCroluKdTUpDbM2vT3rfWVOtZ9csaklpu6A+HCeVyZlhSCxI7q4sXxPyyhaVa5vrYV6p4vUNsOudKXHY6UWqaDdGbEmb4duE7T02yPZecdXZ2dqdlTBb97Jsd75KL5EWzxdG2+WzofChXcKthbCy8pegjaMvnK+kGg9Rj+7RZtfFST0tLMnK2ViLcXER0zPnnzfv40669SMNsstbvNrNN3gykaOg1q76r6XhVF6gvn4knyEGtLRk/cJfSG3lV1FJPEZk9l5S4R4QaqcyyrzV3beroHZNMvUyRjs5u39Zml2NRiAuLncrzlN0O0jF3d7ylq1zeEwAC51V/LeN5pmRnLeqyvQE/uWwqdZVsQyg+sHj+UiaNpsMhvY6i4sOLVwuLXuM7g9o4jtyMHUpAlQMW4zM2E4ciAM9nGfKKWKvNrFqU5SdJuVaHqmfVpZxWafNs+KGGNaWSkiUmeNdVyIsMKViCww5QiI0MVihht+0u0RAFc5appYRWqkFAhVkVW0KiydNaUXEdRaEpplJYM4pTp0NpYpvBFMpFWtGS+RcSpUo3xQ6VImYAMScKquJmbdUDaTHKVmsPSKNnaw3velZbrldW9n5ytwxwmzBvR4koqy4m5b3Nh2AnYOPztQ0bhEENTJVtXFu61xxdsf+8nzNT/h1193G0WO3lQJqZsdbEurvHVNgdmzYRLrUi1NChw41VmZlxZZXAHESCc+L1GUKVJsDOeW9VvC5A8bATfnLXN16kDqVWOQOFeU3K7JWqsSUp3a512bmqCPqQPEyw1Fu6vc1vzwg6NPDVNWq+NHwIEZMGAAE5m+eZvsErqzmajidd9SaemDzGbu4fveT0XC9UkYlSibYShTG4AzIIFwBa3Tc8QlPT+Ewxaxw4dVcC4cAHHfiEuaJXJwpVK4ufuq3QfUfn5X55/adXL8dV/heJvP1ohFAsBzvjtg6oByP+7DC0nVtw4l5yqcHgdh8LybIL3trc6VbCkqg2jADndZt5j6zKNShNxhlKxo3hOhedc7VoWMrshm/W0c+qUKlCPZS84zCkiUlxqdpEU7wGKpWKXBSii0/rSJlqk0qNCUzaZ38bNG4jrUzmc1a+UNQN5ODW5RfKHBlCk8tBrxKHJvBhc5NIQERylgYNjMPhzhIL+wDqrhartxM20L0jYT2ia3CGlLQotVOs26ic9jsHZOA0uoC/pHON2xv4m+dtm25v0dMnq/MVzPuh1tIJLek91d2lxXPrNrjomfQqH07Eaq4W/PpH0hrDrcrtIy8voIGibP7DTPGmvV6ej4kTGXw4EwqrFFXLozPiTI/wALTo0lp0qeouLBSVta5JJzJ4zxk8ct0GBp0jzkRvMAxVEvhnVK5Lz8Z9JPSFggXAjYXdWDqxyOEeBFydmwX2jM4co4NHZ+a6evjNtnjOkprhFhqrOf/UrMNBckYcVWkuHHiXbe5uLjZxGLrq+bBzxJ1K4LR6tqzYzvM2Hm34vDi7DNahpNsQIxUm1WRtbANljfaBs8ZgE5360u0n497dVl5wP+fiZzY65Xe6FpAen1kw+XEZbwzj+DNM9E6VNZk1ldejjt8DbsnaU7MiuhxI6qysvKBm3PWz6w65y/CwC0S0oTDJKYWiQJ6ItM+ro4ms+yVmEJ1Txg1dFz2Rk0a02DTiajH6LzGS2j2imgyRRaPLHjgmHFKFSjH6GKoS8u0UtCCjDrTit05yelLamCWnLC05OmIjSRMgFlHhfSPQ6JVcFVd19FS1ta52keuwufCBY5vhrhH0la6HFST9rR8O654z4n5CY1Q21OVvVW6PV2ZDLoj0SGrM5H7VFd34XPmPMwTAlGfWxVnwr2fl5Naz8VKhuVHteJiGRWI5uxiMMJ6VwBpXpNDpXOJqSrSbwyF+nKbAM4P9KacErto7nCtbDg5uMffZO6E15/GXX6mTOP/WWk2Gj6ODzqr+Vh8514Gai+HFyp5dw5pDVNP0oks2Cs9JexTYWtlxRdX5h8z6y7ZQlHPCO8v2jWipDeA7y+Gf0mbReDZekG8uq/3+fnOq/Tem5NojlcLfu6Pi3mG1lHZt8TOWpkCopO5WTW7fwX8pPRNIahpC8l6NVWTsBsRfpFx5RwWbHphGUEGzjrVVkV0Ksjqroy6ysCLiVXexlIxaZoG15AVIRWBiOEBERJFxIM+USlepFGqNFGAlSGWnEFhVEWliS0xDLREissJJtPElpiTCRRExaeGNpwP6g08VNKcDWpaLipUus/GfPLw6Z1fC+m+h0SrUB/dbDSo985A+GZ8J5wTd+qmszc6XISTGyYBvO6q/V9Y+flC1SAaKDkUsTdudvnBKDqE7zM1VviImOePnUm9kACwgWqfG0eIixiBjAtBytRaiHC6MrK3NI2T0/grS/T6JRrnDjZddV5w2zysGdp+mdKwI9Kpqqr/hlRPUdLp+kilo9WseQur28U8mZizsTrMzMzdpNzO/8A1Bwin8I9MHEzMq/OefxdX6Ofw4j0DrxgY9Ma9+sslSzt0fLeR2+Ay+Ukz3K1DzVxr0HI/Tzkaezvs3wvG2BDyWVqTeFv7Rm6n9PabdH0Q8jXpdZScx4Eg+M1arTh9D0hqVRKg3qTa3WU7R4i87A1bhSNZWVWVucDsMcTRg5hQ9hKoaRepDEyrDVoxqzPNTOTDx4fpaepFKbVIoYNa4MkDIASQmTQZWlhXlIGOKkM0LoqCI1AZRLyQMMLXOfqjSL1qVAPq0k9K69Y3AJPrAB85y4OVue3w/LTQ4WfFpmlEcqsya29kAPv8JSG/wBVPz6S4BA3+qebSwJ1cwfztjsLehB5it3gRn9IA7neb7GEqPeog5iYfzxvDArPvt3pEA7YQJiqYByt2XuD9FxpWvqqq0W8C4v8AfKMgaehsyUig30qt3sJsfHMTeUYa7YMOFsO72AE2kSRTprTTdTHhbnXNz+dEBSc41MqRFupafo4wZ7zNiXW3TMCpSI9lsPeyGydPXplyp5OGVzoWLfhZKJcc3CUtrd2X9L0Aq7W3GZcLeySfK3xmfT2ycXKsKP20PJWqq/f6xVDnVHJx416t/z4QYN6LJzWxfeTvmp5y4fOLDRBzV+dvds6Pguti0dUviak2Dw2j4fKc2BvdVsS/P7zV4IbXcc6kreRt9R8ZUT1+N0vBsYxaCLR4hIx7yGKRxwAt40gHigHQKZMAGUlqZQgqTLGy1hEHUQjZIU6kshrxfhAASam0k444EmOXQ4vhWgy6ZWLhsLvVdGbVxA3II87TPJybrfn0m7+omJ0qkCdX+HXD7xufh8JhsN0fnr+ssiYbiRH/UkttTu4/rIjfY81frAL3BNHFpdJxrKmkJjXoIY3PRqkeM1HASmqJq4Vwd4AkC8HwEhX0z2wqyJhbksQTf8AOmG0pMr9ZsXibxz9RaoY77YyGxkbRyLZzRLZosCiyZF5T0Rzs5POlwHimdVEHQYGHKZHVe0gj6zkmplXsd7AjN1bgG3hedi2xb8nW/POczwgp/iKpI321W5wAAhRFRBk4iOaKebHp7bdaMoycdVvmPtEsht733mlwShBdzu4cC9bMfaZttRfz82TW0Fz6Jv+6+H4RyfU38XmaDLSBaDLS8Z6NijEwGKOHhhjqYoIPFDBrSStLK1BMYVIRapkYqdNlHlym0xaVWaVB7iRYuXV8nKAIkwZBhJinOcP6MzFK6DEqoyu3NtcgnzMwAM16rJ52/tOw4U/5TSLf9Jv7/C85M/6S85q2HyGXzP4JcTQU327jfIyQtt5yPi7Rex/PVGXbfqt8pYZP2KNa+67UWXm7Tl0HPzMZNbgNrU3S7azYsPJyyy6dlx2euX64ymTwG9nqpz1VsPJuNvjNphGmsKqM2g72lvSlsZTM0n4iruiuAf6poioOKYQa0sU69orDlaFSplMDTmxV791ert4vjL7VLzKqteox/NkVnxU/UE2rzsX1Eim1va+Rk7W9F1tfu3I+0gOV+cRk4qEBl7v1mroyFaag7zazfnlM0Hc9iaeOVzEdX5EiYMmMxg2aUzTJiBgcUcGB6MDFBBooAQGTUxgscCSpZptL9KtaZQMMtS0mw5cbS6TJiveYgqwq1ovKp0vaVrU6qcp0dV7SMpy6p/wqvzdKw924H2m6K15R02iBo9XBq4qq1mXp2H7x4PWsgmyIOq/tXyPyt4Syc9BblYNIRu7cEHzygSv7aVOStVk+sv8GIGpVqb8pk/PMQFvxX4NcrpSW3W5Lcq4uOw9M6NmynKISrqd1kbD3SDcH5zo6dS/VxLGVVNJBvnKZl3SzxSkM5c/EUmjCJhI3tAkmaZ55R/M/wDEs1Tk0DTFyo7zN4/4Enr9kXz8lqVQ7o5qp7MGD/X8j94Srvt3fp/cQdrC3OXF5mTf1U/IkBrp3V+plnHBhePq4Y80kxl1dEDyJMYR7QGIxxHtHAgLETFJERQJZBiJkbyJMnFp3j4oItEI8AuOOHghHAhgWUeTq61N05y4ZVBkw0MGqSgnRaqW1kq4/hY/WG4Oezv3cXVz2/Tyhwo1st/e60oaOStax6y/WTit2VPTqdnxjdq73eveWtFrXpp1dXyj1EDCx/8AmU6AK1Gpndb+a2wiPMo3YuV3LGCEdjGlJMTBsYzuBIY7wSHVO6PakqQ4+U0gBcsTzvwQt4pNuqvyYCxzb3fr9PjHI116qrIpmb95oW0UmnbnxMGKMDHvKQcSQEgI94AQCPeDvFeAEJigiYoA5qE5JrSuXYm293YK8QMhrMi02JQhxq2JcTKuLEnQbgZ9lx0ydPSbb6K3mvxErekPr97W+cjeL6fxfNdDmAydXeXz9UmrA7Di7szvz65wiISGN8OFGZeuRa4HTn8D4vU2LscGVVqHBmUxJhXC18T3vfbsK5C1h4ya1gerHKVixeBqU7urjeVlxdYRBwY5aP8AS/BS0iwBwnlLrLAtUtIGt6owMzgbZXeqTBs5O2QJgk5MYORGJjQAgeOXuIGKChlIEneVo4MQWAY94EPHBjAt494K8e8WgS8eCvHvGEiYpG8UArxRRSFlFHAMfDAsMDESfzx+8lh6ZIJnA8oYMfEdl936/wCBJFf/AGjYRAZSDkbC0kKhkSANn80YG2zvQLDl42OMREBDR5OWivJ2HH/Ksc2XcxPiXC2JMOHs2+cNHlAufUvuxi5iI6G92OBbYVbz+sBiAF4oRcOsSWVuThUMvjnIk+v3o9GIxSbIow2dX5y4SuHzAvI2ho8miiitDS8pB4g8jFaPS8iYhFiEHFFqvKeOKQii2jzE8J5skEyvZoUbPz1SFPb7UF4Y3vHtcfzYox/qaTH9L/IwNC0QEYx12+zAESPVqxEji937RNs96QG2BJDZYBf6vORwxxt8I8AQB9StEB0R5GAPbpjjLre1+dMZuTEf/KATDx8UhEYjFDH1xr933YNP6WhDs96AMSDtC+7FZeb/ADH7yJ2e7GMYTIT1N70h6NeIt7VmijGBJCiOevuxzo/qqJ8VkRHEBhjo7etG9o/URvQt6l94feEMUQwI0m9X8w+8UPzooxj/2Q==" alt="">
            </div>
            <div class="col-md-4"></div>
        </div>

        <div style="height: 50px"></div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-7" style="text-align: right">
                {!! $news->text_ar !!}
            </div>
        </div>

        @if(isset($news->youtube))
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <iframe width="420" height="315"
                            src="{{ $news->youtube }}">
                    </iframe>
                </div>
            </div>
        @endif

        <hr class="space">

    </section>
@endsection