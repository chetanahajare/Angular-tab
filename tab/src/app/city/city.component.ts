import { Component } from '@angular/core';
import {MatTableDataSource, MatTableModule} from '@angular/material/table';
import {MatButtonModule} from '@angular/material/button';


@Component({
  selector: 'app-city',
  standalone: true,
  imports: [MatTableModule,MatButtonModule],
  templateUrl: './city.component.html',
  styleUrl: './city.component.scss'
})
export class CityComponent {
  displayedColumns: string[] = ['cityname', 'statename', 'imgurl','actions'];
  dataSource = new MatTableDataSource<any>([
    {cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg'},
    {cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg'},
    {cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg'},
    {cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg'},
    {cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg'},
    {cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg'},
    {cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg'},
    {cityname: 'puna', statename: 'Maharashtra', imgurl: 'sdj.jpeg'},
  ]);
}
