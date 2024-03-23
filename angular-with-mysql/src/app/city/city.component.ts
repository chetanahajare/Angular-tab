import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { MatTableDataSource } from '@angular/material/table';


@Component({
  selector: 'app-city',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './city.component.html',
  styleUrl: './city.component.scss'
})
export class CityComponent {
  displayedColumns: string[] = ['cityname', 'statename', 'imgurl', 'actions'];
  dataSource = [
    { cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg' },
    { cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg' },
    { cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg' },
    { cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg' },
    { cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg' },
    { cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg' },
    { cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg' },
    { cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg' },
  ]
  addCity() {
  }

  editCity(city: any) {
  }

  deleteCity(city: any) {
  }
}
