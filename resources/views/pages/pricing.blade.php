@extends('layouts.web')
@section('title', 'Pricing')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<section class="container py-6 px-4 mx-auto" x-data="datatables()" x-cloak>
    <h1 class="text-4xl font-semibold py-8 text-primary-one text-center">Pricing</h1>

    <div class=" bg-white border border-black shadow-lg relative   overflow-x-auto">
        <table class="border-collapse table-auto w-full whitespace-no-wrap table-striped relative" >
            <thead>
                <tr class="text-center">
                    
                    <template x-for="heading in headings">
                        <th class=" bg-primary-one border border-black sticky top-0 px-2 md:px-6 py-4 text-white font-bold tracking-wider  uppercase text-base whitespace-nowrap overflow-hidden "
                            x-text="heading.value" :x-ref="heading.key" :class="{ [heading.key]: true }"></th>
                    </template>
                 </tr>
            </thead>
            <tbody>
                <template x-for="user in users" :key="user.userId">
                    <tr class="hover:bg-primary-one hover:text-white">

                        <td class="border border-t border-black days">
                            <span class="px-2 md:px-6 py-3 flex justify-center items-center text-xs sm:text:sm md:text-lg" 
                                x-text="user.days"></span>
                          </td>
                        <td class="border border-t border-black undergraduate">
                            <span class=" px-2 md:px-6 py-3 flex justify-center items-center text-xs sm:text:sm md:text-lg" 
                                x-text="user.undergraduate"></span>
                          </td>
                        <td class="border border-t border-black masters">
                            <span class=" px-2 md:px-6 py-3 flex justify-center items-center text-xs sm:text:sm md:text-lg"
                                x-text="user.masters"></span>
                        </td>
                        <td class="border border-t border-black phd">
                            <span class=" px-2 md:px-6 py-3 flex justify-center items-center text-xs sm:text:sm md:text-lg whitespace-nowrap overflow-hidden"
                                x-text="user.phd"></span>
                        </td>
                        
                    </tr>
                </template>
            </tbody>
        </table>

        
    </div>
    <div class="mt-6 flex flex-col justify-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
        <a href="javascript:void(Tawk_API.toggle())" class="btn-sec bg-primary-one mx-auto md:mx-0">
            Live Chat
        </a>
        <a href="{{ route('order') }}" class="btn mx-auto md:mx-0">
            Order Now
        </a>
      </div>
</section>

@endsection

@section('scripts')
<script>
    function datatables() {
        return {
            headings: [
                
                {
                    'key': 'days',
                    'value': 'No. Of Days'
                },
                {
                    'key': 'undergraduate',
                    'value': 'Under Graduate'
                },
                {
                    'key': 'masters',
                    'value': 'Masters'
                },
                {
                    'key': 'phd',
                    'value': 'PHD'
                }
                
            ],
            users: [{
                "userId": 1,
                "days": "20 Days +",
                "undergraduate": "AED 40",
                "masters": "AED 50",
                "phd": "AED 60"
                
            }, {
                "userId": 2,
                "days": "15 Days",
                "undergraduate": "AED 45",
                "masters": "AED 55",
                "phd": "AED 65"
            }, {
                "userId": 3,
                "days": "10 Days",
                "undergraduate": "AED 55",
                "masters": "AED 65",
                "phd": "AED 75"
            }, {
                "userId": 4,
                "days": "7 Days",
                "undergraduate": "AED 60",
                "masters": "AED 70",
                "phd": "AED 80"
            }, {
                "userId": 5,
                "days": "6 Days",
                "undergraduate": "AED 65",
                "masters": "AED 75",
                "phd": "AED 85"
            }, {
                "userId": 6,
                "days": "5 Days",
                "undergraduate": "AED 70",
                "masters": "AED 80",
                "phd": "AED 90"
            }, {
                "userId": 7,
                "days": "4 Days",
                "undergraduate": "AED 75",
                "masters": "AED 85",
                "phd": "AED 95"
            }, {
                "userId": 8,
                "days": "3 Days",
                "undergraduate": "AED 85",
                "masters": "AED 95",
                "phd": "AED 105"
            }, {
                "userId": 9,
                "days": "2 Days",
                "undergraduate": "AED 105",
                "masters": "AED 115",
                "phd": "AED 125"
            }, {
                "userId": 10,
                "days": "24 Hours",
                "undergraduate": "AED 115",
                "masters": "AED 125",
                "phd": "AED 135"
            }, {
                "userId": 11,
                "days": "12 Hours",
                "undergraduate": "AED 160",
                "masters": "AED 165",
                "phd": "AED 175"
            }, {
                "userId": 12,
                "days": "6 Hours",
                "undergraduate": "AED 175",
                "masters": "AED 185",
                "phd": "AED 195"
            }],
            selectedRows: [],

            open: false,
            
            // toggleColumn(key) {
            //     // Note: All td must have the same class name as the headings key! 
            //     let columns = document.querySelectorAll('.' + key);

            //     if (this.$refs[key].classList.contains('hidden') && this.$refs[key].classList.contains(key)) {
            //         columns.forEach(column => {
            //             column.classList.remove('hidden');
            //         });
            //     } else {
            //         columns.forEach(column => {
            //             column.classList.add('hidden');
            //         });
            //     }
            // },

            getRowDetail($event, id) {
                let rows = this.selectedRows;

                if (rows.includes(id)) {
                    let index = rows.indexOf(id);
                    rows.splice(index, 1);
                } else {
                    rows.push(id);
                }
            },

            selectAllCheckbox($event) {
                let columns = document.querySelectorAll('.rowCheckbox');

                this.selectedRows = [];

                if ($event.target.checked == true) {
                    columns.forEach(column => {
                        column.checked = true
                        this.selectedRows.push(parseInt(column.name))
                    });
                } else {
                    columns.forEach(column => {
                        column.checked = false
                    });
                    this.selectedRows = [];
                }
            }
        }
    }
</script>
@endsection